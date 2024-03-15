<div class="card card-primary">
  <div class="card-header">
    <h3 class="card-title">Bài Viết</h3>
  </div>

  
  <!-- /.card-header -->
  <!-- form start -->
  <form  method="POST" action="" enctype="multipart/form-data">
    <div class="card-body">
      <div class="form-group">
        <label for="name">Tiêu đề bài viết</label>
        <input type="text" class="form-control" value="<?= $data['name'] ?? '' ?>" name="name" id="name" placeholder="Nhập tên bài viết">
      </div>
      <div class="form-group">
        <label for="thumbnail">Ảnh</label>
        <div class="input-group">
          <input type="file" value="<?= $data['thumbnail'] ?? '' ?>" required name="thumbnail">
        </div>
      </div>
      <label for="content">Nội dung</label>
      <textarea name="content" id="summernote"><?= $data['content'] ?? '' ?></textarea>
      <div class="form-group">
      <label for="post_category_id">Danh muc</label>
      <input name="post_category_id" type=" text" class="form-control" id="exampleInputText1"
        placeholder="">
    </div>
    </div>
</div>
<!-- /.card-body -->

<div class="card-footer">
  <button type="submit" class="btn btn-primary">Submit</button>
</div>
</form>
</div>