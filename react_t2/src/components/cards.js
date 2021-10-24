import React from 'react'

const Users = ({ loading, users }) => {
  const mainstyle = {
    display: 'grid',
    gridTemplateColumns: 'repeat(' + 3 + ',' + 1 +  'fr)',
  };
  return loading ? (
    
    <div class="main" align="center">
    </div>

  ) :
    (
      <div id="main" style={mainstyle}>

        {users.map(user =>
          <div className="user_1" key={user.id}>
            {
              console.log(user)
            }

            <img src={user.avatar} alt={user.avatar} className="tar"></img>
            <h1 className="username">{user.first_name} {user.last_name}</h1>
            <p className="mail">{user.email}</p>
            <p>User ID: {user.id}</p>
          </div>
        )
        }
      </div>
    )
}

export default Users;