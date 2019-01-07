userHasScrolled = false;
function scrollScript() {
  if (!userHasScrolled) {
    $("html, body").animate(
      {
        scrollTop: $(".navbar").offset().top
      },
      "slow"
    );
    userHasScrolled = true;
  }
}
