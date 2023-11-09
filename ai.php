<?php

require __DIR__ . '/vendor/autoload.php';

use Orhanerday\OpenAi\OpenAi;

$open_ai_key = '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'; // Replace with your actual API key
$open_ai = new OpenAi($open_ai_key);

// Get user message from POST request
$userMessage = isset($_POST['userMessage']) ? $_POST['userMessage'] : '';

// Fixed context prompt for an elementary math teacher
$contextPrompt = "You are an elementary math teacher. ";

// Combine the context prompt and user's message
$prompt = "$contextPrompt\nUser: $userMessage";

$complete = $open_ai->completion([
    'model' => 'text-davinci-003',
    'prompt' => $prompt,
    'temperature' => 0.9,
    'max_tokens' => 150,
    'frequency_penalty' => 0,
    'presence_penalty' => 0.6,
]);

$response = json_decode($complete, true);
$responseText = $response['choices'][0]['text'];

// Return the response as JSON
echo json_encode(['message' => $responseText]);
?>
