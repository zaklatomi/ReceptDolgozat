import React, { useContext } from "react";
import { ApiContext, useApi } from "../context/ApiContext.js";
import Recept from "./Recept.js";

function ReceptekTablazat() {
  const { receptek } = useApi();

  return (
    <table>
      <thead>
        <tr>
          <th>Név</th>
          <th>Kategória</th>
          <th>Leírás</th>
        </tr>
      </thead>
      <tbody>
        {receptek.map((recept) => (

          <Recept key={recept.id} recept={recept} />
          
        ))}
      </tbody>
    </table>
  );
}

export default ReceptekTablazat;
