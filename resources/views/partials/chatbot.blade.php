<div class="chatbot-container">
    <button class="chatbot-button" onclick="toggleChat()">
        <i class="mdi mdi-message-text"></i>
    </button>
    <div class="chatbot-box" id="chatBox">
        <div class="chat-header">
            <h5 class="text-white">BITS Assistant</h5>
            <button onclick="toggleChat()"><i class="mdi mdi-close"></i></button>
        </div>
        <div class="chat-messages" id="chatMessages">
            <!-- Messages will be added here -->
        </div>
        <div class="chat-input">
            <input type="text" id="userInput" placeholder="Type your message...">
            <button onclick="sendMessage()">
                <i class="mdi mdi-send"></i>
            </button>
        </div>
    </div>
</div>

<style>
.chatbot-container {
    position: fixed;
    bottom: 20px;
    right: 20px;
    z-index: 1000;
}

.chatbot-button {
    width: 60px;
    height: 60px;
    border-radius: 50%;
    background: #2f55d4;
    border: none;
    box-shadow: 0 2px 5px rgba(0,0,0,0.2);
    color: white;
    font-size: 24px;
    cursor: pointer;
    transition: all 0.3s;
}

.chatbot-button:hover {
    transform: scale(1.1);
}

.chatbot-box {
    position: absolute;
    bottom: 80px;
    right: 0;
    width: 300px;
    height: 400px;
    background: white;
    border-radius: 10px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.2);
    display: none;
    flex-direction: column;
}

.chat-header {
    padding: 15px;
    background: #2f55d4;
    color: white;
    border-radius: 10px 10px 0 0;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.chat-header button {
    background: none;
    border: none;
    color: white;
    cursor: pointer;
}

.chat-messages {
    flex-grow: 1;
    padding: 15px;
    overflow-y: auto;
}

.chat-input {
    padding: 15px;
    display: flex;
    gap: 10px;
    border-top: 1px solid #eee;
}

.chat-input input {
    flex-grow: 1;
    padding: 8px;
    border: 1px solid #ddd;
    border-radius: 20px;
    outline: none;
}

.chat-input button {
    background: #2f55d4;
    border: none;
    color: white;
    padding: 8px 15px;
    border-radius: 20px;
    cursor: pointer;
}
</style>

<script>
function toggleChat() {
    const chatBox = document.getElementById('chatBox');
    chatBox.style.display = chatBox.style.display === 'none' ? 'flex' : 'none';
}

function sendMessage() {
    const input = document.getElementById('userInput');
    const message = input.value.trim();
    if (message) {
        const messages = document.getElementById('chatMessages');
        messages.innerHTML += `<div style="margin-bottom:10px;text-align:right;">
            <span style="background:#2f55d4;color:white;padding:8px 15px;border-radius:20px;display:inline-block;">
                ${message}
            </span>
        </div>`;
        input.value = '';
        // Add bot response logic here
    }
}
</script>
