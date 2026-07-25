<div>
     <h2>Hey this is your form user</h2>

     <form action="addUser" method="post">
        @csrf
       <div class="input-wrapper">
        <input type="text" placeholder="Enter your name" name="name">
       </div>
       <div class="input-wrapper">
        <input type="text" placeholder="Enter your password" name="password">
       </div>
       <div class="input-wrapper">
        <input type="text" placeholder="Enter your email" name="email">
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