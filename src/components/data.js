import React, { useState, useEffect } from "react";

const Data = () => {
  const [item, setItem] = useState([]);
  //www.youtube.com/watch?v=gfTZznFWAGE&t=321s
  // 6min13 6m45
  https: useEffect(() => {
    fetch("http://localhost/crud-master/api.php")
      .then(res => res.json)
      .then(result => {
        console.log(result);
      });
  }, []);
  return (
    <>
      <div className="row">
        <div className="d_flex my-4, text-upp"></div>
        Fetching data from local server using PHP Json_encode method
      </div>
      <table className="table table-bordered">
        <thead className="thead-dark">
          <tr>
            <th>ID</th>
            <th>name</th>
            <th>phone</th>
            <th>email</th>
            <th>address</th>
            <th>date</th>
          </tr>
        </thead>
        <tbody>
          {item.map(item => (
            <tr key={(console.log(item), item.id)}>
              <td> key={item.name}</td>
              <td> key={item.phone}</td>
              <td> key={item.email}</td>
              <td> key={item.address}</td>
              <td> key={item.date}</td>
            </tr>
          ))}
        </tbody>
      </table>
    </>
  );
};

export default Data;
