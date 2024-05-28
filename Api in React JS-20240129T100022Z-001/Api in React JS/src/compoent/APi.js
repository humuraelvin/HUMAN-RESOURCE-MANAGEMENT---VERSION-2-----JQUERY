
import React,{useState,useEffect} from 'react'

import './style.css'
const UserApi = ()=>{

 const [users,setUsers] = useState([])

 const f = async()=>{
    const res = await fetch("https://reqres.in/api/users")
    const json = await res.json()
     const data = json.data
   
    setUsers(json.data)
     
 };
 useEffect(()=>{
    f()
 },[])


    return(<>
    
          <div className='App'>
            <h1>Working with <span>React</span> API </h1>
             <div className='widget'>
                 {
                    users.length &&
                     users.map((user)=>{
                         return(
                            <>
                             <div className='box' key={user.id}>
                                <img key={user.avatar} src={user.avatar} />
                                 <h4>{user.first_name}</h4>
                                 <p>{user.email}</p>
                             </div>
                            </>
                         )
                     })
                 }    


             </div>
          </div>



    </>)
}


export default UserApi