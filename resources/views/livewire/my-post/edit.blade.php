<div>
    <h1 class="text-black text-center offset-5">Edit Post</h1>
    <div class="card offset-6 mt-5" id="post-edit">

    @if (session('message'))
        <div class="alert alert-success text-center">{{ session('message') }}</div>
    @endif
        <div class="card-header" style="background-color:rgb(255, 234, 0);">
            <h5 class="text-center mt-2">Select Genre</h5>
            <select name="category" id="select-cat" class="text-center" wire:model.defer="category">
                <option hidden="true">Genre</option>
                <option selected disabled>Genre</option>
                <option value="others">Others</option>
                <option value="drama">Drama</option>
                <option value="action">Action</option>
                <option value="sweet">Sweet</option>
                <option value="comedy">Comedy</option>
                <option value="horror">Horror</option>
            </select>
                @error('category')
                    <p class="text-danger text-center">{{ $message }}</p>
                @enderror
        </div>
        <div class="card-body">
            <textarea class="form-control" name="remarks" id="" cols="58" rows="5" wire:model.defer="remarks"></textarea>
        </div>

            @error('remarks')
                <p class="text-danger text-center">{{ $message }}</p>
            @enderror
        <button class="btn" style="background-color:rgb(109, 199, 240);" wire:click="editPost()">Update</button>
        <button class="btn btn-secondary mt-1" wire:click="back()">
            Cancel
        </button>
    </div>
</div>


<style>
    #post-edit {
        width: 550px;
    }
    #select-cat {
        width: 120px;
        margin-left: 39%;
    }
</style>
