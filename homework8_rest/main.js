
var getbut = $('.getbut');
  getbut.on('click', function(){
    var idgood = $('input[name=getgood]').val();

    $.ajax({
      url: 'multirest.php',
      method: 'GET',
      data: {
        getgood: idgood
      },
            // dataType: 'json'
    }).done(function (data){
      var resp = JSON.parse(data)
      console.log(resp);
    });
  })


  var postbut = $('.postbut');
    postbut.on('click', function(){
      var idcat = $('input[name=getcat]').val();
      var name = $('input[name=getname]').val();

      $.ajax({
        url: 'multirest.php',
        method: 'POST',
        data: {
          getcat: idcat,
          getname: name
        },
              // dataType: 'json'
      }).done(function (data){
        var resp = JSON.parse(data)
        console.log(resp);

      });
    })


    var putbut = $('.putbut');
      postbut.on('click', function(){
        var idgood = $('input[name=getgood]').val();
        var name = $('input[name=getname]').val();

        $.ajax({
          //url: 'multirest.php?getgood=' + idgood + '&getname=' + name,
          url: 'multirest.php',
          method: "PUT",
          data: {
            getgood: idgood,
            getname: name
          },
                // dataType: 'json'
        }).done(function (data){
          var resp = JSON.parse(data)
          console.log(resp);
        });
      })
