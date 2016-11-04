var beginFade = function() {
   
   var faders = $(".fader div");
   
   faders.each(function(i) {
      if (i) {
         $(this).css({
            'display': 'none'
         });
      }
   });
   
   var moveToNext = function() {
      
      var cur = $(".fader div.opaque");
      
      cur.removeClass("opaque");
      cur.fadeToggle(3000);
      
      console.log(cur.index());
      
      var nextIndex = cur.index() == $(".fader div").length - 1 ? 0 : cur.index() + 1;
      
      $(".fader div").eq(nextIndex).addClass("opaque");
      $(".fader div").eq(nextIndex).fadeToggle(3000);
      
      setTimeout(moveToNext, 7000);
   };
   
   setTimeout(moveToNext, 7000);
   
};