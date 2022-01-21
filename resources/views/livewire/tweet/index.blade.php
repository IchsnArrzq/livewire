<div>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="py-4 px-6 ">
                <livewire:tweet.add />

                <div class="card-header">
                    <h4 class="card-title">timelime</h4>
                </div>
                <div class="card-body">
                    @foreach ($tweets as $tweet)
                        <livewire:tweet.single :key='$tweet->id' :tweet='$tweet' />
                    @endforeach
                    {{ $tweets->links() }}
                </div>
            </div>
        </div>
    </div>
</div>