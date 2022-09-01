import axios, { AxiosRequestHeaders } from "axios";

const baseURL = "https://jagua-bit.servimav.com";
// const baseURL = "http://localhost:8000";

const $api = axios.create({
    baseURL: `${baseURL}/api`,
    timeout: 30000,
    timeoutErrorMessage: "Error en la red",
    withCredentials: true,
});

$api.interceptors.request.use((_request) => {
    /* Append content type header if its not present */
    if (!(_request.headers as AxiosRequestHeaders)["Content-Type"]) {
        (_request.headers as AxiosRequestHeaders)["Content-Type"] =
            "application/json";
    }
    return _request;
});

export { $api, baseURL };
