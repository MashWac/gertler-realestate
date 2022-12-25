$('.show_confirmrequest').click(function(event) {
    var form =  $(this).closest("form");
    event.preventDefault();
    swal({
        title: `Are you sure you want to Service this request?`,
        text: "If you service this, it will be gone forever.",
        icon: "warning",
        buttons: true,
        dangerMode: true,
    })
    .then((isConfirm) => {
      if (isConfirm) {
        form.submit();
      }
    });
});