import { $api } from "./_axios";
import { BaseService, IBaseService } from "./baseService";

/**
 * -----------------------------------------
 *	Types
 * -----------------------------------------
 */
/**
 * Message Model
 */
export interface IMessage {
    id: number;
    name: string;
    email: string;
    subject?: string;
    content: string;
    visible: boolean;
}
/**
 * Message Store Request
 */
export type IMessageRequestStore = Omit<IMessage, "id" | "visible">;
/**
 * Message Request Update
 */
export interface IMessageRequestUpdate {
    content?: string;
    visible?: boolean;
}

/**
 * -----------------------------------------
 *	Services
 * -----------------------------------------
 */

const MessageService: IBaseService<
    IMessage,
    IMessageRequestStore,
    IMessageRequestUpdate
> = BaseService($api, "messages");

/**
 * all
 * @returns
 */
MessageService.all = async () => $api.get<IMessage[]>("messages/all");

export { MessageService };
