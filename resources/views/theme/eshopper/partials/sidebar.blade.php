<div class="col-sm-3">
    <div class="left-sidebar">
        <h2>Kategori</h2>
        <div class="panel-group category-products" id="accordian">
            <!--category-productsr-->
            @foreach($kategori as $item)
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title"><a href="#">{{$item->nama_kategori}}</a></h4>
                </div>
            </div>
            @endforeach
        </div>
        <!--/category-products-->

    </div>
</div>