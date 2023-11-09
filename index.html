<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ChatGPT Interface</title>
    <style>
       body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        #chat-container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            overflow: hidden;
        }

        #chat-messages {
            padding: 20px;
            height: 300px;
            overflow-y: auto;
            border-bottom: 1px solid #ddd;
        }

        #user-input {
            display: flex;
            padding: 10px;
            border-top: 1px solid #ddd;
        }

        #user-message {
            flex: 1;
            padding: 8px;
            margin-right: 10px;
            border: 1px solid #ddd;
            border-radius: 3px;
        }

        #send-button {
            background-color: #4CAF50;
            color: #fff;
            border: none;
            padding: 8px 15px;
            border-radius: 3px;
            cursor: pointer;
        }
    </style>
</head>
<body>

<div id="chat-container">
    <div id="chat-messages"></div>
    <form id="user-input" onsubmit="sendMessage(); return false;">
        <input type="text" id="user-message" placeholder="Type your message...">
        <button id="send-button" type="submit">Send</button>
    </form>
</div>

<script>
    function sendMessage() {
    const userMessage = document.getElementById('user-message').value.trim();
    if (userMessage === '') return;

    appendMessage('user', userMessage);

    const xhr = new XMLHttpRequest();
    xhr.open('POST', 'ai.php', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            try {
                const jsonResponse = JSON.parse(xhr.responseText);
                const botResponse = jsonResponse.message;
                appendMessage('bot', botResponse);
                document.getElementById('user-message').value = '';
                scrollChatToBottom();
            } catch (error) {
                console.error('Error parsing JSON:', error);
            }
        }
    };

    const requestBody = 'userMessage=' + encodeURIComponent(userMessage);
    xhr.send(requestBody);
}

function appendMessage(sender, message) {
    const chatMessages = document.getElementById('chat-messages');
    const messageElement = document.createElement('div');
    messageElement.className = sender === 'user' ? 'user-message' : 'bot-message';
    messageElement.textContent = sender === 'user' ? `You: ${message}` : `MathEdu: ${message}`;
    chatMessages.appendChild(messageElement);
}

function scrollChatToBottom() {
    const chatMessages = document.getElementById('chat-messages');
    chatMessages.scrollTop = chatMessages.scrollHeight;
}

</script>

</body>
</html>
