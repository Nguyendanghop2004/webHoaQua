<form action="{{route('test')}}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="file" name="file" id="">
    <button type="submit"> inpoit</button>
</form>
