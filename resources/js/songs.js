const songs = document.querySelectorAll('songs');

for(let song of songs) {
    song.addEventListener('click', _ => {
        console.log(song);
    });
}
console.log('heeeey');