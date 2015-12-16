<body style="text-align: center">
      <h1>MISSING:</h1>
      <h3>{{ $pet->petName }}</h3>
      <p><img src='{{ $pet->photo }}' width="200" height="200" alt="Pet Photo"></p>

      <p>{{ $pet->breed }}</p>
      <p>Owner:  {{ $user->name }}</p>
      <p>Address:  {{ $user->address }}</p>
      <p>Phone:  {{ $user->phone }}</p>
      <h3>When & Where my pet went missing:</h3>
      <p class="notebox"></p>
      <div style="width:500; height:200; border:double; margin-left:auto; margin-right:auto;" >
      </div>
</body>
