import { $api } from "./_axios";
/**
 * -----------------------------------------
 *	Types
 * -----------------------------------------
 */
export type IUserRole = "developer" | "admin" | "editor" | "user";
/**
 * User Model
 */
export interface IUser {
    id: number;
    name: string;
    email: string;
    role: IUserRole;
}
/**
 * User Request Login
 */
export interface IUserRequestLogin {
    email: string;
    password: string;
}
/**
 * User Auth Response
 */
export interface IUserAuthResponse {
    data: IUser;
    api_token: string;
}

/**
 * -----------------------------------------
 *	Services
 * -----------------------------------------
 */

/**
 * User Service
 */
export function UserService() {
    return {
        /**
         * authLogin
         * @param p
         * @returns
         */
        authLogin: async (p: IUserRequestLogin) =>
            $api.post<IUserAuthResponse>("users", p),
    };
}
