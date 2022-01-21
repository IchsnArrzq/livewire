<div>
    <div class="card mb-3">
        <div class="card-header">
            <h4 class="card-title">update your tweet</h4>
        </div>
        <div class="card-body">
            <form action="#" wire:submit.prevent='addTweet'>
                <div class="form-group">
                    <label for='body' class="form-label">body</label>
                    <textarea class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm resize-none" id="body" placeholder="what's on your mind"
                        wire:model='body'></textarea>
                    @error('body')
                    <small class="text-red-500">{{ $message }}</small>
                    @enderror
                    </div>
                
                <div class="">
                    @error('body')
                    <x-jet-button disabled>tweet</x-jet-button>
                    @else
                    <x-jet-button>tweet</x-jet-button>
                    @enderror
                </div>
            </form>
        </div>
    </div>
</div>