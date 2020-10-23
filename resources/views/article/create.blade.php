<form action="{{route('baiviet.store')}}" method="post">
    @csrf
    <div>
        <label for="title">Tieu de:</label>
        <input type="text" name="title" />
    </div>
    <div>
        <label for="content">Noi dung:</label>
        <br>
        <textarea cols="25" rows="10" name="content"></textarea>
    </div>
    <br>
    <div>
        <button type="submit">Dang bai</button>
    </div>
</form>
