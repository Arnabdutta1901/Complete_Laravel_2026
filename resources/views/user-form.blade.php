<div>
     <h2>Hey this is your form user</h2>

     <form action="addUser" method="post">
        @csrf
       <div class="input-wrapper">
        <input type="text" placeholder="Enter your name" name="name">
        <span style="color:red">@error('name'){{ $message }}@enderror</span>
       </div>
       <div class="input-wrapper">
        <input type="text" placeholder="Enter your password" name="password">
        <span style="color:red">@error('password'){{ $message }}@enderror</span>
       </div>
       <div class="input-wrapper">
        <input type="text" placeholder="Enter your email" name="email">
         <span style="color:red">@error('email'){{ $message }}@enderror</span>
       </div>
        <div class="input-wrapper">
            <h5> Skill</h5>
            <input type="checkbox" name="skill" value="PHP" id="php">
            <label for="php">PHP</label>
            <input type="checkbox" name="skill" value="Python" id="python">
            <label for="python">Python</label>
            <input type="checkbox" name="skill" value="Node" id="node">
            <label for="node">Node</label>
              <span style="color:red">@error('skill'){{ $message }}@enderror</span>
        </div>
       <div class="input-wrapper">
           <button type="submit">Add New User</button>
       </div>
     </form>
</div>
<style>
input{
    border:1px solid orange;
    background-color:white;
    width:200px;
    height:36px;


}
.input-wrapper{
    margin:10px;
}
button{    
    border:1px solid orange;
    background-color:orange;
    width:200px;
    height:36px;
    cursor:pointer;
}
</style>