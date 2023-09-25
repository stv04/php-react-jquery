<header class="d-flex justify-content-center py-3 shadow-sm sticky-top bg-white">
    <ul class="nav nav-pills">
        <li class="nav-item"><a href="/php-react-jquery/Home" class="nav-link">Incio</a></li>
        <li class="nav-item"><a href="/php-react-jquery/Home/Jquery" class="nav-link">JQuery</a></li>
        <li class="nav-item"><a href="/php-react-jquery/Home/React " class="nav-link">React</a></li>
    </ul>
</header>

<script>
    const path = "<?php echo $GLOBALS["path"];?>"
    
    const el = document.querySelector(`[href="${path}"]`);

    if(el) el.classList.add("active");

</script>