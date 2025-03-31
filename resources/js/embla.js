import EmblaCarousel from "embla-carousel";
import AutoScroll from "embla-carousel-auto-scroll";

const addTogglePrevNextBtnsActive = (emblaApi, prevBtn, nextBtn) => {
    const togglePrevNextBtnsState = () => {
        if (emblaApi.canScrollPrev()) prevBtn.removeAttribute("disabled");
        else prevBtn.setAttribute("disabled", "disabled");

        if (emblaApi.canScrollNext()) nextBtn.removeAttribute("disabled");
        else nextBtn.setAttribute("disabled", "disabled");
    };

    emblaApi
        .on("select", togglePrevNextBtnsState)
        .on("init", togglePrevNextBtnsState)
        .on("reInit", togglePrevNextBtnsState);

    return () => {
        prevBtn.removeAttribute("disabled");
        nextBtn.removeAttribute("disabled");
    };
};

const addPrevNextBtnsClickHandlers = (emblaApi, prevBtn, nextBtn) => {
    const scrollPrev = () => {
        emblaApi.scrollPrev();
    };
    const scrollNext = () => {
        emblaApi.scrollNext();
    };
    prevBtn.addEventListener("click", scrollPrev, false);
    nextBtn.addEventListener("click", scrollNext, false);

    const removeTogglePrevNextBtnsActive = addTogglePrevNextBtnsActive(
        emblaApi,
        prevBtn,
        nextBtn
    );

    return () => {
        removeTogglePrevNextBtnsActive();
        prevBtn.removeEventListener("click", scrollPrev, false);
        nextBtn.removeEventListener("click", scrollNext, false);
    };
};

const addPlayBtnListeners = (emblaApi, playBtn) => {
    const togglePlayBtnState = (emblaApi) => {
        const autoScroll = emblaApi?.plugins()?.autoScroll;
        if (!autoScroll) return;

        const buttonText = autoScroll.isPlaying() ? "<i class=\"fa-solid fa-play\"></i>" : "<i class=\"fa-solid fa-pause\"></i>";
        playBtn.innerHTML = buttonText;
    };

    const onPlayBtnClick = () => {
        const autoScroll = emblaApi?.plugins()?.autoScroll;
        if (!autoScroll) return;

        const playOrStop = autoScroll.isPlaying()
            ? autoScroll.stop
            : () => autoScroll.play({ delay: 0 });
        playOrStop();
    };

    playBtn.addEventListener("click", onPlayBtnClick);
    emblaApi
        .on("autoScroll:play", togglePlayBtnState)
        .on("autoScroll:stop", togglePlayBtnState)
        .on("reInit", togglePlayBtnState);

    return () => {
        playBtn.removeEventListener("click", onPlayBtnClick);
        emblaApi
            .off("autoScroll:play", togglePlayBtnState)
            .off("autoScroll:stop", togglePlayBtnState)
            .off("reInit", togglePlayBtnState);
    };
};

const addNavBtnListeners = (emblaApi, ...navButtons) => {
    const onNavClick = () => {
        const autoScroll = emblaApi?.plugins()?.autoScroll;
        if (!autoScroll) return;

        const resetOrStop =
            autoScroll.options.stopOnInteraction === false
                ? autoScroll.reset
                : autoScroll.stop;

        resetOrStop();
    };

    navButtons.forEach((navButton) =>
        navButton.addEventListener("click", onNavClick, true)
    );

    return () => {
        navButtons.forEach((navButton) =>
            navButton.removeEventListener("click", onNavClick, true)
        );
    };
};

const OPTIONS = { loop: true };

const emblaNode = document.querySelector(".embla");
const viewportNode = emblaNode.querySelector(".embla__viewport");
const prevBtn = emblaNode.querySelector(".embla__button--prev");
const nextBtn = emblaNode.querySelector(".embla__button--next");
const playBtn = document.querySelector(".embla__play");

const emblaApi = EmblaCarousel(viewportNode, OPTIONS, [
    AutoScroll({ playOnInit: true, delay: 0 }),
]);

const removePrevNextBtnsClickHandlers = addPrevNextBtnsClickHandlers(
    emblaApi,
    prevBtn,
    nextBtn
);
const removePlayBtnListeners = addPlayBtnListeners(emblaApi, playBtn);
const removeNavBtnListeners = addNavBtnListeners(emblaApi, prevBtn, nextBtn);

emblaApi
    .on("destroy", removePrevNextBtnsClickHandlers)
    .on("destroy", removePlayBtnListeners)
    .on("destroy", removeNavBtnListeners);
