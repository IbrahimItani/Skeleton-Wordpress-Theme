$(document).ready(function(){

$(function() {
  $(".content").mousewheel(function(event, delta) {
  this.scrollLeft -= (delta * 3);
  event.preventDefault();
  });
})

});