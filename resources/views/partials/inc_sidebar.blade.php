<?php @$navbar=$_GET['s']; ?>

<div class="col-md-3" style="border-right:2px solid #E9ECEF;">
  <div class="row mb-1">

  <form class="col-md-11">
    <div class="form-group">
      <label for="exampleFormControlInput1">Search Keyword</label>
      <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter search Keyword">
    </div>
    <div class="form-group">
      <label for="exampleFormControlSelect1">Published Year</label>
      <select class="form-control" id="exampleFormControlSelect1">
        <option>2070</option>
        <option>2071</option>
        <option>2072</option>
        <option>2073</option>
        <option>2074</option>
      </select>
    </div>
    <div class="form-group">
      <label for="exampleFormControlSelect2">Category</label>
      <select multiple class="form-control" id="exampleFormControlSelect2">
        <option>Category 1</option>
        <option>Category 2</option>
        <option>Category 3</option>
        <option>Category 4</option>
        <option>Category 5</option>
        <option>Category 6</option>
        <option>Category 7</option>
      </select>
    </div>

    <button type="submit" class="btn btn-primary btn-sm mb-2" style="background:#00275E;">Search</button>
    <button type="Reset" class="btn btn-danger btn-sm mb-2">Reset</button>
  </form>


</div>
<!-- <div class="row mb-3">
  <div class="tweets col-md-11" style="border:2px inset #1DA1F2;border-radius:5px;">
<a class="twitter-timeline " data-height="430" href="https://twitter.com/NepalNHRC" >Tweets by NepalNHRC</a>
 <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
</div>
</div> -->
</div>
