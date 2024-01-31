var animation = { duration: 40000, easing: (t) => t };

var slider = new KeenSlider("#my-keen-slider", {
  loop: true,
  renderMode: "performance",
  drag: true,
  slides: { perView: 2, spacing: 10 },
  breakpoints: {
    "(min-width: 768px)": {
      slides: { perView: 4, spacing: 50 },
    },
  },
  created(s) {
    s.moveToIdx(5, true, animation);
  },
  updated(s) {
    s.moveToIdx(s.track.details.abs + 5, true, animation);
  },
  animationEnded(s) {
    s.moveToIdx(s.track.details.abs + 5, true, animation);
  },
});
