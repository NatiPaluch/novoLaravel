<x-app :pageTitle="$pageTitle">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Mensagens Recebidas</h1>
<<<<<<< HEAD
        <span class="badge bg-primary rounded-pill">{{count($mensagens)}}</span>
=======
        <span class="badge bg-primary rounded-pill">{{ count($mensagens) }}</span>
>>>>>>> 1033cc00b0f653bc28941259b58825fd80cf1283
    </div>

    <div class="card shadow-sm">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover table-striped">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Email</th>
                            <th scope="col">Mensagem</th>
                            <th scope="col">Recebido em</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($mensagens as $mensagem)
                            <tr>
<<<<<<< HEAD
                                    <th scope="row">{{ $mensagem-> id }}</th>
                                    <td>{{ $mensagem-> nome }}</td>
                                    <td>{{ $mensagem-> email }}</td>
                                    <td>{{ $mensagem-> mensagem }}</td>
                                    <td>{{ $mensagem-> created_at ->format('d/m/Y H:i') }}</td>
                                </tr>
                        @empty

                        <tr>
                            <td colspan="5" class="text-center">Nenhuma mensagem recebida ainda.</td>
                        </tr>
                        
                        @endforelse
                                  
                        
=======
                                <th scope="row">{{ $mensagem -> id }}</th>
                                <td>{{ $mensagem -> nome }}</td>
                                <td>{{ $mensagem -> email }}</td>
                                <td>{{ $mensagem -> mensagem }}</td>
                                <td>{{ $mensagem -> created_at ->format('d/m/Y H:i') }}</td>
                            </tr>
                        @empty    
                            <tr>
                                <td colspan="5" class="text-center">Nenhuma mensagem recebida ainda.</td>
                            </tr>
                        @endforelse
>>>>>>> 1033cc00b0f653bc28941259b58825fd80cf1283
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app>