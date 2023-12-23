<div class="header-inner">
    <div class="logo">
        <p>test</p>
    </div>
</div>
<div class="menu-container">
    <span id="scroll-left" class="arrow arrow-left"></span>
    <ul class="menu" id="menu">
        <li class="menu-item"><a href="">menu1</a></li>
        <?php if ($user_flag == 1) : ?>
        <li class="menu-item"><a href="">menu2</a></li>
        <?php endif; ?>
        <li class="menu-item"><a href="">menu3</a></li>
        <li class="menu-item"><a href="">menu4</a></li>
        <?php if ($user_flag == 1) : ?>
        <li class="menu-item"><a href="">menu5</a></li>
        <li class="menu-item"><a href="">menu6</a></li>
        <li class="menu-item"><a href="">menu7</a></li>
        <?php endif; ?>
        <li class="menu-item"><a href="">menu8</a></li>
        <li class="menu-item"><a href="">menu9</a></li>
        <li class="menu-item"><a href="">menu10</a></li>  
    </ul>
    <span id="scroll-right" class="arrow arrow-right"></span>
</div>