// Live Chat

// Mendapatkan token CSRF
let csrfToken = $('meta[name="csrf-token"]').attr('content');
// const chatSound = new Audio("http://localhost:8000/static/audio/chat.mp3");

// Menambahkan token CSRF ke dalam header permintaan
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': csrfToken
    }
});

$(document).ready(function () {

    let customerId = $('.user-list.active').attr('user-id');
    changeReceiver(customerId);

    // Kirim chat dengan Enter
    let chatInput = $('#chat-input');

    chatInput.on('keyup', function (event) {
        // console.log(event);
        if (event.key === 'Enter') {
            if (chatInput.val().trim() !== '') {
                // console.log('send-chat');
                sendChat();
            }
        }
    });

    // Tampilkan chat
    showChat('show');

    // Polling CheckChat
    setInterval(function() {
        showChat('check');
    }, 8000);

    // Username Toggle
    $('[data-toggle="tooltip"]').tooltip();
});

function getDataUser(userId) {
    var usersElement = $('#users-data');
    var usersData = usersElement.data('users');

    for (var i = 0; i < usersData.length; i++) {

        var userData = usersData[i];

        if (userData.id == userId) {
            return userData;
        }
    }
}

function changeReceiver(customerId) {
    let userData = getDataUser(customerId);

    $('.image-user img').prop('src', `http://localhost:8000/${ userData.photo_profile }`);
    $('.image-user h5').text(`${userData.name}`);
}

function moveCustomer(userId) {

    $('.user-list.active a').addClass('text-dark');
    $('.user-list.active i').addClass('text-dark');

    $('.user-list.active').removeClass('active');
    $('.user-list[user-id="' + userId + '"]').addClass('active');

    $('.user-list.active a').removeClass('text-dark');
    $('.user-list.active i').removeClass('text-dark');
    $('.user-list.active a').addClass('text-light');
    $('.user-list.active i').addClass('text-light');

    let customerId = $('.user-list.active').attr('user-id');
    changeReceiver(customerId);

    showChat('show');
}

function showChat(dec) {

    let customerId = $('.user-list.active').attr('user-id');

    if (customerId === '1') {
        customerId = loginId;
    }

    let urlGet = '/api/live-chat/' + customerId;

    // console.log(loginId, ' : ', customerId);

    $.ajax({
        type: 'GET',
        url: urlGet,
        data: {},
        success: function(response) {
            // console.log(response);
            let chats = response['data'];
            let maxLength = chats.length - 1;
            let lastChat = chats[maxLength];

            if (dec == 'check') {
                let chatId = lastChat['chat_id'];
                let cookieChatId = getCookieValue();
                // console.log(chatId + ' : ' + cookieChatId);
                // console.log(chatId == cookieChatId);

                if (chatId != cookieChatId) {
                    document.cookie = "last-chat=" + chatId;
                    addNewChat(lastChat);
                    scrollToBottom();
                    // chatSound.play();
                }

                return;
            }

            $('#content-chat').empty();
            document.cookie = "last-chat=" + lastChat['chat_id'];

            for (let i = 0; i < chats.length; i++) {
                let chat = chats[i];
                addNewChat(chat);
            }

            if (dec != 'delete') {
                scrollToBottom();
            }
        }
    });
}

function addNewChat(chat) {

    let customerId = $('.user-list.active').attr('user-id');

    let chatId = chat['chat_id'];
    let senderId = chat['sender_id'];
    let receiverId = chat['receiver_id'];
    let chatText = chat['chat'];
    let file = chat['file'];
    let dateTime = chat['date_time'];
    let isRead = chat['is_read'];

    let receiverData = getDataUser(customerId);
    let senderData = getDataUser(loginId);
    let senderProfile = senderData.photo_profile;
    let receiverProfile = receiverData.photo_profile;
    let senderName = senderData.name;
    let receiverName = receiverData.name;

    let temp_html = ``;
    // console.log(chatText);

    if (loginId === senderId) {
        temp_html = `
        <table id="sender">
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td id="user-chat">
                    ${senderName}
                </td>
                <td></td>
            </tr>
            <tr>
                <td id="delete-chat" onclick="openModalConfirm(${chatId})">
                    <div>
                        <img src='http://localhost:8000/static/image/delete-icon.png' alt="delete-icon">
                    </div>
                </td>
                <td></td>
                <td id="edit-chat">
                    <div>
                        <img src='http://localhost:8000/static/image/edit-icon.png' alt="delete-icon">
                    </div>
                </td>
                <td></td>
                <td id="chat-sender">
                    ${chatText}
                </td>
                <td>
                    <img src='http://localhost:8000/${ senderProfile }' class="img-circle elevation-2" alt="sender-img">
                </td>
            </tr>
            <tr id="date-time">
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>
                    <span>${dateTime}</span>
                </td>
                <td></td>
            </tr>
        </table>
        `;
    } else {
        temp_html = `
        <table id="receiver">
            <tr>
                <td></td>
                <td id="user-chat">
                    ${receiverName}
                </td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>
                    <img src='http://localhost:8000/${receiverProfile}' class="img-circle elevation-2" alt="receiver-img">
                </td>
                <td id="chat-receiver">
                    ${chatText}
                </td>
                <td></td>
                <td id="edit-chat">
                    <div>
                        <img src='http://localhost:8000/static/image/edit-icon.png' alt="delete-icon">
                    </div>
                </td>
                <td></td>
                <td id="delete-chat" onclick="openModalConfirm(${chatId})">
                    <div>
                        <img src='http://localhost:8000/static/image/delete-icon.png' alt="delete-icon">
                    </div>
                </td>
            </tr>
            <tr id="date-time">
                <td></td>
                <td>
                    <span>${dateTime}</span>
                </td>
                <td></td>
                <td></td>
            </tr>
        </table>
        `;
    }

    // console.log(temp_html);

    $('#content-chat').append(temp_html);
}

function sendChat() {

    let customerId = $('.user-list.active').attr('user-id');

    let senderId = loginId;
    let receiverId = customerId;
    let chat = $('#chat-input').val();

    let data = {
        sender_id: senderId,
        receiver_id: receiverId,
        chat: chat,
        file: 'knowhere',
        is_read: 0,
    }

    // console.log(receiverId);
    // return;

    $.ajax({
        type: 'POST',
        url: '/api/live-chat',
        data: data,
        success: function(response) {
            // console.log(response);
            let chat = response['data'];
            document.cookie = "last-chat=" + chat['chat_id'];

            // console.log(document.cookie);

            $('#chat-input').val('');
            $('#send-chat').css('display', 'none');
            addNewChat(chat);
            scrollToBottom();
            // chatSound.play();
        }
    });
}

function deleteChat(chat_id) {
    closeModalConfirm();

    $.ajax({
        type: 'DELETE',
        url: `/api/live-chat/${chat_id}`,
        data: {},
        success: function(response) {
            showChat('delete');
        }
    });
}

function openModalConfirm(chat_id) {
    $('#confirmDeleteModal').modal('show');
    $('#confirmDeleteButton').attr('onclick', `deleteChat(${chat_id})`);
}

function closeModalConfirm() {
    $('#confirmDeleteModal').modal('hide');
}

function scrollToBottom() {
    $("html, body").animate({ scrollTop: "80000px" });
}

function checkInputChat() {
    let sendChat = $('#send-chat');
    let chatInput = $('#chat-input');
    if (chatInput.val().trim() !== '') {
        sendChat.css('display', 'flex');
    } else {
        sendChat.css('display', 'none');
    }
}

function getCookieValue() {
    var cookies = document.cookie;
    // console.log(cookies);
    var cookie = cookies.split(';');

    for (var i = 0; i < cookie.length; i++) {
        let values = cookie[i].split('=');
        // console.log(values[0]);
        let value = values[1];

        if (values[0].trim() == 'last-chat') {
            // console.log(value);
            return value;
        }
    }
}
