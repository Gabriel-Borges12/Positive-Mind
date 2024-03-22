async function sendMessage() {
    document.querySelector('.send-button').addEventListener('click', sendMessage);

    const userInput = document.getElementById('user-input').value;
    if (!userInput) return;

    const requestOptions = {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'Authorization': 'Bearer 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' // Troque 'Bearer' por 'sk'
        },
        body: JSON.stringify({ prompt: userInput })
    };

    try {
        const response = await fetch('https://api.openai.com/v1/completions', requestOptions);
        if (!response.ok) {
            throw new Error('Failed to get response from API');
        }
        const data = await response.json();
        const botResponse = data.choices[0].text.trim();
        displayMessage(userInput, 'user');
        displayMessage(botResponse, 'bot');
        document.getElementById('user-input').value = '';
    } catch (error) {
        console.error('Error:', error);
        // Adicione aqui lógica para lidar com erros, como exibir uma mensagem para o usuário
    }
}

function displayMessage(message, sender) {
    const chatDisplay = document.getElementById('chat-display');
    const messageElement = document.createElement('div');
    messageElement.classList.add('message', sender);
    messageElement.innerText = message;
    chatDisplay.appendChild(messageElement);
    chatDisplay.scrollTop = chatDisplay.scrollHeight;
}
