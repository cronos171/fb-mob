import socket

# Definindo o endereço IP e a porta para o servidor
HOST = '192.168.18.8'  # Endereço IP local
PORT = 80  # Porta que o servidor vai escutar

# Criando um objeto socket TCP
with socket.socket(socket.AF_INET, socket.SOCK_STREAM) as server_socket:
    # Vinculando o servidor ao endereço e porta especificados
    server_socket.bind((HOST, PORT))
    
    # Colocando o servidor para escutar novas conexões
    server_socket.listen()

    print(f"Servidor TCP está escutando em {HOST}:{PORT}")

    # Aceitando conexões entrantes
    connection, address = server_socket.accept()

    with connection:
        print(f"Conexão estabelecida com {address}")

        # Loop para receber mensagens do cliente e enviar respostas
        while True:
            # Recebendo dados do cliente
            data = connection.recv(1024)
            if not data:
                break

            # Adicionando o cabeçalho de solicitação ngrok-skip-browser-warning
            response = b"HTTP/1.1 200 OK\r\nngrok-skip-browser-warning: any_value\r\n\r\n"

            # Exibindo os dados recebidos
            print(f"Mensagem recebida do cliente: {data.decode()}")

            # Adicionando a resposta de volta para o cliente
            response += b"Recebido com sucesso!"
            connection.sendall(response)
