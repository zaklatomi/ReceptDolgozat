import React, { createContext, useContext, useState, useEffect } from 'react';
import { myAxios } from './MyAxios';

const ApiContext = createContext();

export function ApiProvider({ children }) {

    const [receptek, setReceptek] = useState([]);
    const [kategoriak, setKategoriak] = useState([]);

    function getKeres(){

        myAxios.get('/api/receptek').then((response) => setReceptek(response.data));
        myAxios.get('/api/kategoriak').then((response) => setKategoriak(response.data));

    }

    useEffect(() => {
        getKeres();
    }, []);

    return (
        <ApiContext.Provider value={{ receptek, kategoriak }}>
            {children}
        </ApiContext.Provider>
    );
};


export function useApi() {
    return useContext(ApiContext);
  }
