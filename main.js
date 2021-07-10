const soundBtn = document.querySelector(".sound-btn");
const soundBtnOn = document.querySelector(".sound-on");
const soundBtnOff = document.querySelector(".sound-off");
const audio = document.querySelector(".audio");
const audioModal = document.querySelector(".audio-modal");
const modalSoundBtn = document.querySelector(".modal-sound-btn");
const modalSoundOn = document.querySelector(".modal-sound-on");
const modalSoundOff = document.querySelector(".modal-sound-off");

modalSoundBtn.addEventListener("click", (e) => {
    if(e.target === modalSoundOn) {
        audio.play();
        audioModal.style.display = "none";
        soundBtn.style.display = "block";
        soundBtnOn.classList.add("inactive");
    } else if (e.target === modalSoundOff) {
        audio.pause();
        audioModal.style.display = "none";
        soundBtn.style.display = "block";
        soundBtnOff.classList.add("inactive");
    }
})


soundBtnOn.addEventListener("click", () => {
    audio.play();
    soundBtnOn.classList.add("inactive");
    soundBtnOff.classList.remove("inactive");
})

soundBtnOff.addEventListener("click", () => {
    audio.pause();
    soundBtnOff.classList.add("inactive");
    soundBtnOn.classList.remove("inactive");
})


