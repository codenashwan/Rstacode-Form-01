<?php require_once('includes/nav.php');?>
<div class="bg-white p-3 text-center radius-20 m-3">
    <img src="assets/img/warning.svg" width="100" alt="">
    <h1>تکایە ئەم ڕێنمایەنا جێ بەجێ بکە</h1>
    <ul class="list-group list-group-flush m-3 text-right">
        <li class="list-group-item">ئەم فۆڕمە تایبەتە بە قۆناغی سێهەمی کۆمپیوتەر</li>
        <li class="list-group-item">تکایە ناوی چواری کوردی خۆت وەک پێناسەکەت بە تەواو بنوسە</li>
        <li class="list-group-item">تکایە ناوی چواری ئینگلیزیت وەک پەسەپۆرتەکەت بنوسە بەبێ هیچ هەڵەیەک</li>
        <li class="list-group-item">لەکاتی بوونی هەر کێشەیەک تکایە نوێنەرەکەت ئاگادار بکەوە</li>
    </ul>
</div>


<div class="col-lg-8 col-sm bg-white text-center radius-20 p-3 m-auto">
    <h1>لێرە ناوی چواری ئینگلیزی/کوردی لەگەڵ کلاسەکەت پڕبکەرەوە</h1>
    <div class="alert alert-danger text-white d-none">چاوەڕێ بکە</div>
    <div class="form radius-20 text-center p-3">
        <input type="text" id="nameku" placeholder="ناوی چواری بە کوردی"
            class="form-control m-1 border-dark text-center rounded-0 form-control-lg">
        <input type="text" id="nameen" placeholder="ناوی چواری بە ئینگلیزی"
            class="form-control m-1 border-dark text-center rounded-0 form-control-lg">
        <select id="class" class="form-control m-1 border-dark rounded-0 form-control-lg">
            <option value="1">Group A</option>
            <option value="2">Group B</option>
        </select>
        <button id="submit" class="btn btn-primary btn-lg w-100 m-1">ناردن</button>
</div>
<a href="view.php" class="btn btn-warning btn-lg w-100">بینینی ناوەکان</a>
</div>
</div>




<?php require_once('includes/footer.php');?>

