
<script src="{{url('assets5/js/jquery.min.js')}}"></script>
<script src="{{url('assets5/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{url('assets5/js/chart.min.js')}}"></script>
<script src="{{url('assets5/js/bs-init.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
<script src="{{url('assets5/js/theme.js')}}"></script>
<script
    src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
    crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.16.0/sweetalert2.min.js" integrity="sha512-jJHgrGWRvOyyVt4TghrM7L+HSb02QkXJPPBJhDIkiqEzUYWBKe76GVVsZggmjZWOmsPwS0WSPIvyUGZzJta8kg==" crossorigin="anonymous"></script>
<script>
    $('#btn').on('click', function (){

        Swal.fire({
            title: '<strong>HTML <u>example</u></strong>',
            icon: 'info',
            html:
                'You can use <b>bold text</b>, ' +
                '<a href="//sweetalert2.github.io">links</a> ' +
                'and other HTML tags',
            showCloseButton: true,
            showCancelButton: true,
            focusConfirm: false,
            confirmButtonText:
                '<i class="fa fa-thumbs-up"></i> Great!',
            confirmButtonAriaLabel: 'Thumbs up, great!',
            cancelButtonText:
                '<i class="fa fa-thumbs-down"></i>',
            cancelButtonAriaLabel: 'Thumbs down'
        })
    });
</script>
