<div>
   <h1>Your checkbox  learning start  from here</h1>
   <form action="addUser2" method="POST">
    @csrf
        <div>
            <h5>User Skill</h5>
            <input type="checkbox" name="skill[]" value="PHP" id="php">
            <label for="php">PHP</label>
            <input type="checkbox" name="skill[]" value="Python" id="python">
            <label for="python">Python</label>
            <input type="checkbox" name="skill[]" value="Node" id="node">
            <label for="node">Node</label>
        </div>
        <div>
            <h5>Gender</h5>
            <input type="radio" name="gender" value="Male" id="male">
            <label for="male">Male</label>
            <input type="radio" name="gender" value="Female" id="female">
            <label for="female">Female</label>
        </div>
        <div>
           <h5>Select Your City</h5>
                <select name="city" id="city">
                    <option value="">Select Your City</option>
                    <option value="Delhi">Delhi</option>
                    <option value="Mumbai">Mumbai</option>
                    <option value="Bangalore">Bangalore</option>
                    <option value="Chennai">Chennai</option>
                </select>
        </div> 
        <div>
           <h5>Age:</h5>
           <input type="range" name="age" id="age" min="18" max="60">  
        </div>
        <button type="submit">Submit</button>
   </form>
</div>
