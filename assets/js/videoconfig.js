document.addEventListener('DOMContentLoaded', function () {



    var player;
    var videoContainer = document.getElementById("video-container");
    if (!videoContainer) return;


    var idVideo = videoContainer.getAttribute("data-video");


    function createPlayer() {


        player = new YT.Player('video-container', {
            width: '100%',
            videoId: idVideo,
            origin: 'https://quaxx.com.br',
            playerVars: {
                'autoplay': 0,
                'controls': 0,
                'mute': 1,
                'loop': 1,
                'playlist': idVideo,
                'modestbranding': 1,
                'rel': 0,
                'fs': 0,             // Remove botão de fullscreen
                'iv_load_policy': 3, // Remove anotações
                'showinfo': 0        // (obsoleto, mas pode ajudar)
            },
            events: {
                'onReady': onPlayerReady,
                'onStateChange': onPlayerStateChange
            }
        });
    }

    // Quando o player estiver pronto
    function onPlayerReady(event) {
        event.target.setPlaybackQuality('hd1080');
        checkVideoTime();
    }

    // Quando o estado do player mudar (por exemplo, buffering)
    function onPlayerStateChange(event) {
        if (event.data === YT.PlayerState.BUFFERING) {
            event.target.setPlaybackQuality('hd1080'); // ou 'hd720'
        }
    }

    function checkVideoTime() {
        setInterval(function () {
            if (player && player.getDuration) {
                const currentTime = player.getCurrentTime();
                const duration = player.getDuration();
                const antepenultimoTime = duration - 3;

                if (currentTime >= antepenultimoTime) {
                    player.seekTo(0);
                }
            }
        }, 500);
    }

    function waitForYTAndCreatePlayer() {
        const interval = setInterval(function () {
            if (typeof YT !== 'undefined' && YT.loaded === 1) {
                clearInterval(interval);
                createPlayer();
            }
        }, 300);
    }

    waitForYTAndCreatePlayer();

    // Alterna som do vídeo
    function toggleMute() {
        if (player) {
            let isMuted = player.isMuted();
            if (isMuted) {
                player.unMute();
                $('#bt-sound').text('SOM');
            } else {
                player.mute();
                $('#bt-sound').text('SOM');
            }
        }
    }

    function togglePlayPause() {
        const coverAram = document.querySelector('.cover-aram');

        coverAram.style.display = 'none';
        this.style.display = 'none';

        if (player && player.getPlayerState) {
            const state = player.getPlayerState();

            if (state === YT.PlayerState.PLAYING) {
                player.pauseVideo();
                $('#bt-play').text('play'); // atualiza o texto do botão
            } else {
                player.playVideo();
                $('#bt-play').text('pause'); // atualiza o texto do botão
            }
        }
    }

    // $('#bt-sound').on('click', toggleMute);
    $('#bt-play').on('click', togglePlayPause);

})