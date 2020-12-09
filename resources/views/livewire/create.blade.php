<div>
	
    <div class="form-group">
        <label for="exampleInputPassword1">Enter Name</label>
        <input type="text" wire:model="name" class="form-control input-sm"  placeholder="Name">
        @error('name')
        <p class="text-danger">{{$message}}</p>
        @enderror
    </div>
    <div class="form-group">
        <label>Enter Email</label>
        <input type="email" class="form-control input-sm" placeholder="Enter email" wire:model="email">
        @error('email')
        <p class="text-danger">{{$message}}</p>
        @enderror
    </div>
    <button wire:click="store()" class="btn btn-primary">Submit</button>
   
</div>


 