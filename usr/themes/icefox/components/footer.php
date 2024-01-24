<?php

if (!defined('__TYPECHO_ROOT_DIR__'))
    exit;

?>

<div class="fixed left-10 bottom-10 text-gray-300 text-[12px] side-area">
    <a href="https://xiaopanglian.com" class="cursor-pointer text-gray-300" target="_blank">Icefox Theme</a> .
    <?php
    $beian = $this->options->beian;
    if (isset($beian)) {
        echo '<a href="https://beian.miit.gov.cn/" class="cursor-pointer text-gray-300" target="_blank">'.$beian.'</a>';
    }
    ?>
</div>
<div class="fixed right-10 bottom-10 side-area">
    <div class="w-[48px] h-[48px] cursor-pointer" onclick="scrollToTop(); return false;">
        <svg t="1700186173794" class="icon cursor-pointer" viewBox="0 0 1024 1024" version="1.1"
            xmlns="http://www.w3.org/2000/svg" p-id="4023" xmlns:xlink="http://www.w3.org/1999/xlink" width="48"
            height="48">
            <path d="M507.07968 512m-493.67552 0a96.421 96.421 0 1 0 987.35104 0 96.421 96.421 0 1 0-987.35104 0Z"
                fill="#E8E9EC" p-id="4024" class="cursor-pointer"></path>
            <path d="M663.4496 410.22464 512.21504 256.06144 360.5504 410.22464Z" fill="#666666" p-id="4025"
                class="cursor-pointer"></path>
            <path
                d="M558.67904 624.90112l16.32256-9.35936c-6.55872-11.36128-13.83936-22.72256-21.84192-34.07872l-14.63808 8.87808C547.00032 603.29984 553.71776 614.81984 558.67904 624.90112z"
                fill="#666666" p-id="4026" class="cursor-pointer"></path>
            <path
                d="M650.35776 561.78176 588.4416 561.78176l11.76064-5.51936c-3.04128-7.04-8.16128-16.5632-15.36-28.56448l-16.55808 7.68c6.31808 10.39872 11.03872 19.20512 14.16192 26.40384l-60.00128 0 0 16.08192 127.91808 0L650.36288 561.78176z"
                fill="#666666" p-id="4027" class="cursor-pointer"></path>
            <path
                d="M411.56096 593.4592 366.67904 593.4592 366.67904 709.38112 385.16224 709.38112 385.16224 610.7392 477.7984 610.7392 477.7984 708.41856 496.2816 708.41856 496.2816 593.4592 430.03904 593.4592 437.71904 561.05984 507.07968 561.05984 507.07968 543.77472 364.04224 543.77472 364.04224 561.05984 418.2784 561.05984Z"
                fill="#666666" p-id="4028" class="cursor-pointer"></path>
            <path
                d="M359.48032 549.53472 270.19776 549.53472l0 17.52576 38.64064 0 0 159.36c0 7.36256-3.84 11.03872-11.52 11.03872-7.83872 0-15.44192-0.88576-22.79936-2.64192 1.76128 6.88128 3.04128 13.99296 3.84 21.36064 4.96128 0.31744 11.52 0.48128 19.68128 0.48128 19.68128 0 29.52192-9.5232 29.52192-28.55936l0-161.03936 31.91808 0L359.48032 549.53472z"
                fill="#666666" p-id="4029" class="cursor-pointer"></path>
            <path
                d="M440.36096 648.89856l0-26.39872-18.47808 0 0 26.88c0 29.12256-5.51936 50.88256-16.55808 65.28-12.48256 15.36-33.83808 27.36128-64.08192 35.99872 4.63872 6.24128 8.47872 12.00128 11.52 17.28 32.64-10.24512 55.59808-24.47872 68.87936-42.72128 1.92-2.56 3.68128-5.44256 5.27872-8.64256 23.52128 15.84128 45.99808 32.64 67.44064 50.40128l13.44-16.08192c-22.24128-16.64-46.87872-33.60256-73.92256-50.88256C438.20032 685.94176 440.36096 668.9024 440.36096 648.89856z"
                fill="#666666" p-id="4030" class="cursor-pointer"></path>
            <path
                d="M719.95904 625.3824c13.12256-25.75872 22.79936-46.72 29.04064-62.87872l0-19.6864-86.4 0 0 222.48448 18.24256 0 0-204.71808 48.96256 0c-10.72128 25.28256-21.27872 48.24064-31.68256 68.87936 23.83872 17.92 36.08064 35.44064 36.72064 52.56192 1.28 19.35872-5.12 29.04064-19.2 29.04064-8.32 0-18.31936-0.96256-29.99808-2.88256 1.28 8.32 2.31936 15.36 3.11808 21.12 13.59872 1.60256 24.47872 1.92 32.64 0.96256 21.60128-2.24256 32.39936-17.12128 32.39936-44.64128C753.80224 663.06048 742.51776 642.97984 719.95904 625.3824z"
                fill="#666666" p-id="4031" class="cursor-pointer"></path>
            <path
                d="M634.99776 589.13792l-17.76128-9.11872c-6.00064 13.59872-13.76256 28.64128-23.28064 45.12256l-76.8 0 0 16.08192 137.51808 0 0-16.08192-41.8816 0C620.64128 613.2992 628.03968 601.29792 634.99776 589.13792z"
                fill="#666666" p-id="4032" class="cursor-pointer"></path>
            <path
                d="M534.44096 764.09856l17.76128 0 0-18.00192 68.16256 0 0 17.76128 17.76128 0 0-97.67936-103.68 0L534.44608 764.09856zM552.91904 680.41728l67.88096 0 0 48.64-67.88096 0L552.91904 680.41728z"
                fill="#666666" p-id="4033" class="cursor-pointer"></path>
        </svg>
    </div>
</div>

<div class="hidden">
    <input class="webSiteHomeUrl" value="<?php echo getWebsiteHomeUrl(); ?>" />
    <input class="_currentPage" value="<?php if ($this->_currentPage > 1)
        echo $this->_currentPage;
    else
        echo 1; ?>" />
    <input class="_totalPage" value="<?php echo ceil($this->getTotal() / $this->parameter->pageSize); ?>" />
    <input id="commentsRequireMail" value="<?php echo $this->options->commentsRequireMail; ?>" />
    <input id="commentsRequireURL" value="<?php echo $this->options->commentsRequireURL; ?>" />
    <li>
        <div class="bg-white p-2 rounded-sm border-1 border-solid border-[#07c160]">
            <div class="grid grid-cols-3 gap-2">
                <input placeholder="昵称" class="border-0 outline-none bg-color-primary p-1 rounded-sm" />
                <input placeholder="网址" class="border-0 outline-none bg-color-primary p-1 rounded-sm" />
                <input placeholder="邮箱" class="border-0 outline-none bg-color-primary p-1 rounded-sm" />
            </div>
            <div class="mt-2">
                <input placeholder="回复内容" class="border-0 outline-none w-full rounded-sm p-1" />
            </div>
            <div class="flex justify-end mt-2">
                <div class="face mr-2 cursor-pointer"></div>
                <button
                    class="btn-comment bg-[#07c160] border-0 outline-none text-white cursor-pointer rounded-sm">回复</button>
            </div>
        </div>
    </li>
</div>
</body>

</html>