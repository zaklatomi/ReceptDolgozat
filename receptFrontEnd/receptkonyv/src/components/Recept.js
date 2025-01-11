import React from "react";

function Recept({ recept }) {
  return (
    <tr>
      <td>{recept.nev}</td>
      <td>{recept.kategoria.nev}</td>
      <td>{recept.leiras}</td>
    </tr>
  );
}

export default Recept;
