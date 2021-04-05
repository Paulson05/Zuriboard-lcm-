
<script src="assets1/js/jquery.min.js"></script>
<script src="assets1/bootstrap/js/bootstrap.min.js"></script>
<script src="assets4/js/jquery.min.js"></script>
<script src="assets4/bootstrap/js/bootstrap.min.js"></script>
<!-- jQuery CDN -->
<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<!-- Bootstrap Js CDN -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#sidebarCollapse').on('click', function () {
            $('#sidebar').toggleClass('active');
        });
    })
    function openNav() {
        document.getElementById("mySidenav").style.width = "120px";
        document.getElementById("main").style.marginLeft = "120px";
    }

    /* Set the width of the side navigation to 0 and the left margin of the page content to 0 */
    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
        document.getElementById("main").style.marginLeft = "0";
    }


    const tabitems = document.querySelectorAll(".tab-item");
    const tabContentitems = document.querySelectorAll(".tab-content-item");
    function selectItem(e){
        removeBorder();
        removeShow();
        this.classList.add("tab-border");
        const tabContentitems = document.querySelector(`#${this.id}-content`);
        tabContentitems.classList.add("show");
    }
    function removeBorder(){
        tabitems.forEach(item =>item.classList.remove("tab-border"));
    }
    function removeShow(){
        tabContentitems.forEach(item =>item.classList.remove("show"));
    }
    tabitems.forEach(item => item.addEventListener
    ("click", selectItem))

</script>
<div></div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="app.js"></script>
<script src="assets4/js/jquery.min.js"></script>
<script src="assets4/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>

