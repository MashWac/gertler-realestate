<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    Admin Section
  </title>
  <!--     Fonts and icons     -->
  <link rel="icon" href="{{ url('/assets/staticimg/gertlerinvest.png') }}">
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="{{ asset('frontend/css/nucleo-icons.css')}}" rel="stylesheet" />
  <link href="{{ asset('frontend/css/nucleo-svg.css')}}" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Flamenco:wght@300;400&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
  <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Bebas+Neue&family=Bree+Serif&family=Courgette&family=Kanit:ital,wght@1,500;1,800&family=Kaushan+Script&family=Lobster&family=Lora:ital,wght@1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Acme&family=Goldman&family=Kanit:ital,wght@1,500&family=Lobster&family=Merriweather:ital,wght@0,700;1,900&family=Patua+One&family=Prompt:wght@500&family=Righteous&family=Roboto+Slab:wght@800&family=Russo+One&family=Secular+One&family=Varela+Round&family=Vollkorn:ital,wght@0,400;0,700;1,700;1,900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Lato&family=Oxygen&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Concert+One&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=League+Gothic&family=Lora:wght@500&family=Oswald&family=Roboto+Condensed&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Merriweather&family=Montserrat&family=Open+Sans:ital@0;1&family=Poppins:wght@300;400&family=Raleway:ital,wght@0,400;1,300&family=Red+Hat+Mono&family=Roboto+Condensed&family=Roboto:ital,wght@0,400;1,300&family=Source+Sans+Pro:ital,wght@0,400;1,300&family=Ubuntu:ital@0;1&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Federo&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Fjord+One&display=swap" rel="stylesheet">
  <script type="module" src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule="" src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons/ionicons.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.js" integrity="sha512-vNrhFyg0jANLJzCuvgtlfTuPR21gf5Uq1uuSs/EcBfVOz6oAHmjqfyPoB5rc9iWGSnVE41iuQU4jmpXMyhBrsw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="{{ asset('frontend/css/material-dashboard.css?v=3.0.4') }}" rel="stylesheet"> 
</head>
<body class="g-sidenav-show  bg-gray-200">
@include('layouts.inc.adminsidebar')
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    @include('layouts.inc.adminnav')
        <div class="container-fluid py-4">
        @yield('content')

        </div>
    </main>


    <script src="{{ asset('frontend/js/jquery-3.6.0.min.js') }}" defer></script>
    <script src="{{ asset('frontend/js/bootstrap.min.js') }}" defer></script>
    <script src="{{ asset('frontend/js/imgdisplay.js') }}" defer></script>
    <script src="{{ asset('frontend/js/deletemessage.js') }}" defer></script>
    <script src="{{ asset('frontend/js/multipleimgupload.js') }}" defer></script>
    <script src="{{ asset('frontend/js/multipleimgdisplay.js') }}" defer></script>
    <script src="{{ asset('frontend/js/bootstrap5.2.2.bundle.min.js') }}" defer></script>
    <script src="{{ asset('frontend/js/paycalc.js') }}" defer></script>
    <script src="{{ asset('frontend/js/downloadpdf.js') }}" defer></script>
    <script src="{{ asset('frontend/js/formdisplay.js') }}" defer></script>
    <script src="{{ asset('frontend/js/navbarchange.js') }}" defer></script>
    <script src="{{ asset('frontend/js/material-dashboard.js') }}" defer></script>
    <script src="{{ asset('frontend/js/material-dashboard.min.js') }}" defer></script>
    <script src="{{ asset('frontend/js/material-dashboard.js.map') }}" defer></script>
    <script src="{{ asset('frontend/js/popper.min.js') }}" defer></script>
    <script src="https://cdn.tiny.cloud/1/kssr4fuqfumvhklu1ppthrz6l42rwe99sw91ntfumeihua3h/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    
    @if(session('status'))
    <script>
        swal("{{session('status')}}")
    </script>
    @endif
    <script>
      tinymce.init({
          selector: '#propertydescription',
          plugins: 'preview importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media template codesample table charmap pagebreak nonbreaking anchor insertdatetime advlist lists wordcount help charmap quickbars emoticons',
          menubar: 'file edit view insert format tools table help',
          toolbar: 'undo redo | bold italic underline strikethrough | fontfamily fontsize blocks | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | insertfile image media template link anchor codesample | ltr rtl',
          toolbar_sticky: true,
          autosave_ask_before_unload: true,
          autosave_interval: '30s',
          autosave_prefix: '{path}{query}-{id}-',
          autosave_restore_when_empty: false,
          autosave_retention: '2m',
          image_advtab: true,
          link_list: [
            { title: 'My page 1', value: 'https://www.codexworld.com' },
            { title: 'My page 2', value: 'http://www.codexqa.com' }
          ],
          image_list: [
            { title: 'My page 1', value: 'https://www.codexworld.com' },
            { title: 'My page 2', value: 'http://www.codexqa.com' }
          ],
          image_class_list: [
            { title: 'None', value: '' },
            { title: 'Some class', value: 'class-name' }
          ],
          importcss_append: true,
          file_picker_callback: (callback, value, meta) => {
            /* Provide file and text for the link dialog */
            if (meta.filetype === 'file') {
              callback('https://www.google.com/logos/google.jpg', { text: 'My text' });
            }
        
            /* Provide image and alt text for the image dialog */
            if (meta.filetype === 'image') {
              callback('https://www.google.com/logos/google.jpg', { alt: 'My alt text' });
            }
        
            /* Provide alternative source and posted for the media dialog */
            if (meta.filetype === 'media') {
              callback('movie.mp4', { source2: 'alt.ogg', poster: 'https://www.google.com/logos/google.jpg' });
            }
          },
          templates: [
            { title: 'New Table', description: 'creates a new table', content: '<div class="mceTmpl"><table width="98%%"  border="0" cellspacing="0" cellpadding="0"><tr><th scope="col"> </th><th scope="col"> </th></tr><tr><td> </td><td> </td></tr></table></div>' },
            { title: 'Starting my story', description: 'A cure for writers block', content: 'Once upon a time...' },
            { title: 'New list with dates', description: 'New List with dates', content: '<div class="mceTmpl"><span class="cdate">cdate</span><br><span class="mdate">mdate</span><h2>My List</h2><ul><li></li><li></li></ul></div>' }
          ],
          template_cdate_format: '[Date Created (CDATE): %m/%d/%Y : %H:%M:%S]',
          template_mdate_format: '[Date Modified (MDATE): %m/%d/%Y : %H:%M:%S]',
          height: 400,
          image_caption: true,
          quickbars_selection_toolbar: 'bold italic | quicklink h2 h3 blockquote quickimage quicktable',
          noneditable_class: 'mceNonEditable',
          toolbar_mode: 'sliding',
          contextmenu: 'link image table',
          content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:16px }'
      });
    </script>
</body>
</html>