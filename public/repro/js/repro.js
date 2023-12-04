var song = new Audio();
var muted = false;
var vol = 1;
song.type = 'audio/mpeg';
song.src = 'http://80.84.57.76:3855/;'; //Audio file source url
song.play();

function skip(time) {
    if (time == 'back') {
        song.currentTime = song.currentTime - 5;
    } else if (time == 'fwd') {
        song.currentTime = song.currentTime + 5;
    }
}

function playpause() {
    if (!song.paused) {
        song.pause();
        document.getElementById('play').innerHTML =
            '<i class="icon-playback-play"></i>';
    } else {
        song.play();
        document.getElementById('play').innerHTML =
            '<i class="icon-playback-pause"></i>';
    }

}

function stop() {
    song.pause();
    song.currentTime = 0;
    document.getElementById('seek').value = 0;
}

function setPos(pos) {
    song.currentTime = pos;
}

function mute() {
    if (muted) {
        song.volume = vol;
        muted = false;
        document.getElementById('mute').innerHTML =
            '<i class="icon-volume-up"></i>';
    } else {
        song.volume = 0;
        muted = true;
        document.getElementById('mute').innerHTML = '<i class="icon-mute"></i>';
    }
}

function setVolume(volume) {
    song.volume = volume;
    vol = volume;
}
