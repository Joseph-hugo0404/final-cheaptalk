<div class="container col-md-12 ">
    @include('livewire.modals.modal')
    <div class="profile">
        <h2 class="mt-3" style="font-weight: 400; font-size: 30px;">Recent Posts</h2>
        <hr>
    </div>
    <div class="post-body">
          
        <div class="col-md-4">
            @if (session('message'))
                <div id="messagee" class="alert text-black text-center text-black">{{ session('message') }}</div>
            @endif
            <select class="form-select mb-1" wire:model.lazy="title">
                <option value="All">All</option>
            <option value="Business">Business</option>
            <option value="Education">Education</option>
            <option value="Comedy">Comedy</option>
            <option value="Drama">Drama</option>
            <option value="Horror">Horror</option>
            <option value="Politics">Politics</option>
            <option value="Religion">Religion</option>
            <option value="Romance">Romance</option>
            </select>
            <div class="col p-3 shadow-sm rounded mb-5" id="write">
                <input type="text" class="write-2 form-control" placeholder="Search" wire:model.lazy="search">
            </div>

    </div>
    @if($recents->isEmpty())
        <div class="text-gray-500">
            <h1 class="text-center" style="font-size: 20px;">No posts.</h1>
        </div>
    @endif
    <button onclick="topFunction()" id="myBtn" title="Back to top"><i class="fa-solid fa-arrow-up"></i></button>
</div>

<div class="card-deck offset-2">
    @foreach ($recents as $recent)
    <div class="card-deck">
        <div class="card mt-2 mr-4">
            <div class="col-md-12 mt-4 mr-4 {{ ($recent->user->gender === 'Female')? 'female': 'male'}}">
                <div class="card-body">
                    <div class="card-title">
                        <h4 id="post-title">[{{ $recent->title }}] <hr> <a href="{{url('authors', ['id'=>$recent->user->id])}}"><span><h6 id="username"><span>@</span>{{ $recent->user->email }}</h6></span></a></h4>
                        <p class="timestamp">
                    {{ $recent->created_at->format('F d, Y g:i A') }}</p> <br>
                    <img class="card" style="border-radius: 50%; width: 80px; margin-left: 35%;" id="pf1"
                        src="{{ $recent->user->gender === 'Male' ? asset('images/man.png') : asset('images/woman.png') }}" 
                        alt="photo">
                        <p class="text-center" style="font-weight: bold">[{{ $recent->user->name }}]</p>
                    <div class="card-body bg-secondary" style="border-radius: 5px">
                        <div class="content"><span class="text-light text-control">{{ $recent->content }}</span></div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        @endforeach
</div>

<style>

.f1 {
            background-color: lightpink;
        }
        .m1 {
            background-color: lightblue;
        }
    .name {
        color: whitesmoke;
        font-size: 20px;
        text-decoration: none;
        cursor: pointer;
    }
    .name:hover {
        color: rgb(204, 202, 202);
    }
    .form-select {
        background-color: #2c70b1;
        color: whitesmoke;
    }
    #cardd {
       
        color: whitesmoke;
    }
    .time {
        font-size: 13px;
        margin-left: 45px;
        opacity: 0.8;
    }
    .contentt span {
        font-size: 19px;
    }
    #titlee {
        color: rgb(21, 21, 103);
        font-weight: bold;
        font-style: italic;
        font-size: 14px;
        opacity: 0.8;
    }
    #titleee {
        margin-right: 15px;
        margin-top: 5px;
    }
    #genderr {
        color: rgb(61, 228, 203);
        font-weight: bold;
        font-style: italic;
        font-size: 13px;
        opacity: 0.8;
    }
    .alert {
        background-color: rgba(0, 0, 0, 0.12);
    }
    #myBtn {
        display: none;
        position: fixed;
        bottom: 20px;
        right: 40px;
        z-index: 99;
        font-size: 25px;
        border: none;
        outline: none;
        background-color: rgb(3, 126, 138);
        color: rgb(255, 255, 255);
        cursor: pointer;
        border-radius: 4px;
        padding: 5px 10px 5px 10px;
    }
    #myBtn:hover {
        background-color: rgb(12, 142, 154);
    }
    #write {
       
    }
    .write-2 {
        border-radius: 20px;
    }
    #lc {
        padding: 5px 50px 5px 50px;
        border-radius: 5px;
        cursor: pointer;
    }
    #lc:hover {
        background-color: rgba(89, 88, 88, 0.593);
    }
    .male {
        background-color: rgb(109, 239, 253);
        padding: 3px;
        border-radius: 3px;
    }
    .female {
        background-color: rgb(242, 98, 165);
        padding: 3px;
        border-radius: 3px;
    }
    .bisexual {
        background-image: linear-gradient(to left, violet, indigo, blue, green, rgba(255, 255, 0, 0.275), rgba(255, 166, 0, 0.407), red);
        padding: 3px;
        color: rgb(229, 220, 229);
        border-radius: 3px;
    }
    .transgender {
        background-image: linear-gradient(to left, rgb(42, 162, 242), rgb(206, 115, 189),rgb(245, 229, 246), rgb(206, 115, 189), rgb(42, 162, 242));
        padding: 3px;
        color: rgb(23, 17, 84);
        border-radius: 3px;
    }
    .font-icon {
        font-size: 30px;
        border-radius: 50%;
        padding: 2px;
        opacity: 0.8;
        color: rgb(241, 241, 33);
    }
    .font-icon-heart {
        font-size: 30px;
        border-radius: 50%;
        padding: 2px;
        color: red;
        opacity: 0.8;
    }
    #dot-icon {
        padding: 5px 12px 5px 12px;
        background-color: rgb(206, 204, 204);
        border-radius: 50%;
        cursor: pointer;
    }
    #dot-icon:hover {
        background-color: rgb(230, 224, 224);;
    }
    .profile2 {
        width: 40px;
        border: 1px solid rgb(66, 65, 65);
        padding: 4px;
        height: 40px;
        border-radius: 50%;
    }

    #top{
       
       font-size: 50px;
   }


   #post-title{
       /* font-family: 'Raleway', sans-serif; */
       font-weight: bold;
   }
   
   p{
       /* font-family: 'Raleway', sans-serif; */
       font-weight: bold;
   }
   .timestamp{
       font-size: 12px;
   }

   .card-body{
       /* background-color: #33475687; */
       /* color: #1A1B41; */
   }
   
   #username{
       text-decoration: none;
       color: #000000;
   }

   .buttons-for-non-user{
       color: white;
   }
   .buttons-for-user{
       color: black;
   }
   #post-box{
       border-radius: 10px;
       
   }

   .card-footer-recent{
       border-bottom-left-radius: 10px; 
       border-bottom-right-radius: 10px; 
   }

   
   a{
       /* color: #BAFF29; */
       margin-right: 8px;
   }
   
   .female2{
       background-color: hotpink;
   }
   .male2{
       background-color: dodgerblue;
   }

   ::-webkit-scrollbar {
       display: none;
   }
</style>


<script>
    // Get the button
    let mybutton = document.getElementById("myBtn");

    // When the user scrolls down 20px from the top of the document, show the button
    // window.onscroll = function() {scrollFunction()};

    // function scrollFunction() {
    //   if (document.body.scrollTop > 400 || document.documentElement.scrollTop > 400) {
    //     mybutton.style.display = "block";
    //   } else {
    //     mybutton.style.display = "none";
    //   }
    // }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }

    setTimeout(function() {
        var msg = document.getElementById("messagee");
        msg.parentNode.removeChild(msg);
    }, 1500);
</script>
