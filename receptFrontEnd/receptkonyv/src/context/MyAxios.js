import axios from "axios";

export const myAxios = axios.create({ baseURL: "http://127.0.0.1:8000/" });