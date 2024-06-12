interface Funcionario {
    id: number;
    nome: string;
    telefone: string;
    chave_pix: number;
}

interface Evento {
    id: number;
    local: string;
    tipo: string;
    numero_convidados: number;
    valor: number;
    observacao: string;
}

interface Responsavel {
    id: number;
    nome: string;
    telefone: string;
    telefone_2: string;
    cpf: string;
    endereco: string;
}
