import { AxiosInstance, AxiosResponse } from "axios";
/**
 * IService
 */
export interface IBaseService {
    destroy: (id: number) => Promise<AxiosResponse>;
    index: () => Promise<AxiosResponse>;
    show: (id: number) => Promise<AxiosResponse>;
    store: (p: unknown) => Promise<AxiosResponse>;
    update: (id: number, p: unknown) => Promise<AxiosResponse>;
    [key: string]: CallableFunction;
}
/**
 * BaseService
 * @returns
 */
export function BaseService<
    Model = unknown,
    ReqStore = unknown,
    ReqUpdate = unknown
>($api: AxiosInstance, path = "") {
    return {
        /**
         * destroy
         * @param id
         * @returns
         */
        destroy: async (id: number) => $api.delete(`${path}/${id}`),
        /**
         * index
         * @returns
         */
        index: async () => $api.get<Model[]>(path),
        /**
         * show
         * @param id
         * @returns
         */
        show: async (id: number) => $api.get<Model>(`${path}/${id}`),
        /**
         * store
         * @param p
         * @returns
         */
        store: async (p: ReqStore) => $api.post<Model>(path, p),
        /**
         * update
         * @param id
         * @param p
         * @returns
         */
        update: async (id: number, p: ReqUpdate) =>
            $api.patch<Model>(`${path}/${id}`, p),
    };
}
