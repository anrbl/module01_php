<!-- 페이지네이션 -->
<div class="sub_page">
    <a href="/">홈</a> : <?=$cate_title?> : <?=$title?> <?=$num?>
</div>

<hr/>

<div class="submenu">
    <? include '../nav.php'?>
</div>

<hr/>

<style>
    .sub_page {
        font-size:30px;
    }

    .submenu li.on {
        color:salmon;
    }
</style>

<script>
    $(function(){
        console.log(<?=$num?>);

        $('.submenu li').eq(<?=$num - 1?>).addClass('on');
    });
</script>