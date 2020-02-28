<!-- Favicons -->
<meta name="csrf-token" content="{{ csrf_token() }}">
  <link href="{{asset('main/assets/img/favicon.png')}}" rel="icon">
  <link href="{{asset('main/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('main/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('main/assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('main/assets/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
  <link href="{{asset('main/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('main/assets/vendor/venobox/venobox.css')}}" rel="stylesheet">
  <link href="{{asset('main/assets/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{asset('main/assets/vendor/aos/aos.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('main/assets/css/style.css')}}" rel="stylesheet">

<script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>

<script type="text/javascript">
    var counter = Number('1');
    
    $(document).on('click', '#addBlog', function(event) {
        event.preventDefault();
        var value = Number('2');
        counter += value;
        myfunc(counter);
    });
    
    function myfunc(counter) {
        $.ajax({
          method: "POST",
          headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
          url: "{{ route('blog') }}",
          data: { addBlog: counter }
        })
          .done(function( data ) {
            $('#refresh').html(data);
          });
    }
</script>

<!--<script type="text/javascript">
      var counter = Number("2");
      $(document).on('click', '#addBlog', function(event){
            event.preventDefault();
            var value = Number("2");
            counter += value;
//          console.log(counter);
          myfunc(counter);
      });
      function myfunc(counter){
            $.ajax({
                    url: "{{ route('blog') }}",
                    method: "POST",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: { addBlog: counter }
                  })
                    .done (function (data){
//                        console.log(data);
                    $('#refresh').html(data);
                    });          
      }
  </script>-->