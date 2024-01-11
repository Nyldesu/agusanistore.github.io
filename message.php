<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agusan.i</title>
    <link rel="icon" href="imgs/logo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="css/message.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script>
        // Chat code script

        function fileboxshow() {
            document.getElementById('filebox').hidden = false;
        }

        function fileboxhide() {
            document.getElementById('filebox').hidden = true;
        }

        function profile() {
            document.getElementById('chatprofile').style.backgroundColor = "#e9e4c8";
            document.getElementById('profile').hidden = false;
            document.getElementById('chatbox').hidden = false;
            document.getElementById('description').hidden = true;
        }

        function chat() {
            document.getElementById('chat').hidden = false;
        }
    </script>
</head>

<body>
    <?php
    include("source/navbar.php") ?>
    <!-- Chat code start -->

    <section class="chat" id="chat" hidden>
        <div class="chat">
            <section class="inbox" id="inbox">
                <div class="inbox">
                    <p class="title">Chats</p>
                    <form action="" class="chatsearch">
                        <input id="chatsearch" type="text" placeholder="Search messages">
                </div>
                <section class="inboxlist">
                    <div class="chatprofile">
                        <button class="chatprofile" type="button" id="chatprofile" onclick="profile()">
                            <img src="imgs/jee.jpg" alt="">
                            <p class="profilename">Jee Abing</p>
                        </button>
                    </div>
                </section>
            </section>
            <section class="description" id="description">
                <div class="description">
                    <img src="imgs/logo.png" alt="">
                    <p>Select chat first</p>
                </div>
            </section>
            <section class="chatbox" id="chatbox" hidden>
                <div class="chatnav">
                    <div class="chatpic">
                        <img src="imgs/jee.jpg" alt="">
                    </div>
                    <p class="chatname">Jee Abing</p>
                    <!-- <div class="settings">
                        <i class="fa-solid fa-gear"></i>
                    </div> -->
                </div>
                <div class="chatspace">

                </div>
                <div class="chattype">
                    <button class="file" type="button" onclick="fileboxshow()"><i class="fa-solid fa-file"></i></button>
                    <div class="filebox" id="filebox" hidden>
                        <button onclick="fileboxhide()" type="button"><i class="fa-solid fa-x"></i></button>
                        <form action="">
                            <input type="file" multiple>
                        </form>
                    </div>
                    <div class="type">
                        <form action="">
                            <div class="typebox">
                                <textarea class="type" name="text" id="" cols="75" rows="1" wrap="hard" placeholder="Type a message here" spellcheck="true"></textarea>
                                <button class="send"><i class="fa-solid fa-paper-plane"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
            <section class="profile" id="profile" hidden>
                <p>hello</p>
            </section>
        </div>
    </section>
</body>

</html>