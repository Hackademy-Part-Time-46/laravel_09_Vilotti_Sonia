<x-layout>
    <form method="POST" action="{{route('store')}}">
        @csrf
        <form>
            <div class="mb-3">
                <label for="title" class="form-label" name="title" type="text">Insert Title</label>
                <input type="text" class="form-control" id="title" aria-describedby="emailHelp" name="title" value="{{old('name')}}">
            </div>
            <div class="mb-3">
                <label for="textarea" class="form-label">Write you're Article</label>
                <input type="textarea" class="form-control" id="textarea" name="textarea" value="{{old('text')}}" placeholder="write something">
            </div>
            <div class="mb-3 form-check">
                <label class="form-check-label" for="submit">Submit</label>
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </form>
</x-layout>